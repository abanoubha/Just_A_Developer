//the function to get the file as a string
String getFileFromAssets(String fileName) throws IOException {
        AssetManager assetManager = getAssets();
        InputStream ins = assetManager.open(fileName);
        BufferedReader br = new BufferedReader(new InputStreamReader(ins));
        StringBuilder sb = null;
        while (br.readLine() != null){
            sb.append(br.readLine());
        }
        return sb.toString();
    }
//calling the function
getFileFromAssets("test.html");
//or (any file)
getFileFromAssets("test.txt");
