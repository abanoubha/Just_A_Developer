//call the function
saveFile(getApplicationContext(), "filename", "the content of the file itself");

//you can use "this" instead of "getApplicationContext()"
saveFile(this, "anotherFileName", "content of the file 2");

//saveFile function
public void saveFile(Context mcoContext,String sFileName, String sBody){

 File file = new File(mcoContext.getFilesDir(),"CVApp");

 if(!file.exists()){
    file.mkdir();
 }

 try{
    File gpxfile = new File(file, sFileName);
    FileWriter writer = new FileWriter(gpxfile);
    writer.append(sBody);
    writer.flush();
    writer.close();
 }catch (Exception e){
    e.printStackTrace();

 }
}
