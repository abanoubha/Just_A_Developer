//initialize the button & editText in OnCreate()
Button copyBtn = findViewById(R.id.copyBtn);
EditText toCopy = findViewById(R.id.etCopy);

//when you click the copy-button this methon/function is fired
copyBtn.setOnClickListener(new View.OnClickListener() {
      @Override
      public void onClick(View v) {
         //the copy2clipboard function called with the text of the editText
         copy2Clipboard(toCopy.getText().toString());
      }
   });
//the function to copy any text passed in
void copy2Clipboard(CharSequence text){
      ClipboardManager clipboard = (ClipboardManager) getSystemService(Context.CLIPBOARD_SERVICE);
      ClipData clip = ClipData.newPlainText("copy text", text);
      if (clipboard != null){
         clipboard.setPrimaryClip(clip);
      }
      Toast.makeText(this," text copied", Toast.LENGTH_LONG).show();
  }
