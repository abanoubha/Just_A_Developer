//the function to get the file as a string
public String loadData(String inFile) {
 String tContents = "";
 try {
    InputStream stream = getAssets().open(inFile);
    int size = stream.available();
    byte[] buffer = new byte[size];
    stream.read(buffer);
    stream.close();
    tContents = new String(buffer);
 } catch (IOException e) {
    // Handle exceptions here
 }
 return tContents;
}
//calling the function
getFileFromAssets("test.html");
//or (any file)
getFileFromAssets("test.txt");
