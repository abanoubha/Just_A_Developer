package main

import (
	"log"
	"time"

	"github.com/jung-kurt/gofpdf"
)

func main() {
	//creating new report PDF
	pdf := newReport()

	//pdf table header
	pdf = header(pdf, []string{"1st column", "2nd", "3rd", "4th", "5th", "6th"})

	//pdf table content
	data := [][]string{
		{"1 1", "1 2", "1 3", "1 4", "1 5", "1 6"},
		{"2 1", "2 2", "2 3", "2 4", "2 5", "2 6"},
		{"abc", "def", "geh", "ijk", "lmn", "opq"},
	}
	pdf = table(pdf, data)

	if pdf.Err() {
		log.Fatalf("failed ! %s", pdf.Error())
	}

	err := pdf.OutputFileAndClose("report-example.pdf")
	if err != nil {
		log.Fatalf("error saving pdf file: %s", err)
	}
}

func newReport() *gofpdf.Fpdf {
	pdf := gofpdf.New("L", "mm", "A4", "")
	pdf.AddPage()

	pdf.SetFont("Times", "B", 28)
	pdf.Cell(40, 10, "PDF Report")
	pdf.Ln(12)

	pdf.SetFont("Times", "", 20)
	pdf.Cell(40, 10, time.Now().Format("Mon Jan 2, 2006"))
	pdf.Ln(20)
	return pdf
}

func header(pdf *gofpdf.Fpdf, headerText []string) *gofpdf.Fpdf {
	pdf.SetFont("Times", "B", 16)
	pdf.SetFillColor(240, 240, 240)

	for _, str := range headerText {
		pdf.CellFormat(40, 10, str, "1", 0, "", true, 0, "")
	}

	pdf.Ln(-1) //newline height equals the last line height

	return pdf
}

func table(pdf *gofpdf.Fpdf, tbl [][]string) *gofpdf.Fpdf {
	pdf.SetFont("Times", "", 16)
	pdf.SetFillColor(255, 255, 255) //white color

	align := []string{"L", "C", "L", "R", "R", "R"}

	for _, line := range tbl {
		for i, str := range line {
			pdf.CellFormat(40, 10, str, "1", 0, align[i], false, 0, "")
		}
		pdf.Ln(-1)
	}
	pdf.Ln(-1)
	return pdf
}
