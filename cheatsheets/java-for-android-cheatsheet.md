# Java for Android Cheat Sheet

**Class Implementation**

```java
public class MyClass {

 public String mString;
 private int mInt;
 // More member variables

 // Constructor for Class
 public MyClass() {
 mString = “Foo”;
mInt = 10;
 }
 // More methods...
}
```

**Methods**

```java
public int doIt() {
 return 0;
}
public int doIt(int a) {
 return a;
}
public int doIt(int a, int b) {
 return a+b;
}
```

**Creating/Using an Instance**

```java
SomeObject a = new SomeObject();
a.getMemberVariable();
a.doIt();
a.doIt(1);
a.doIt(2,3);
Declaring Variables
double doubleVar = 1.0
doubleVar = 2.0
int intVar = 1;
String stringVar = “Hey”;
Boolean truth = true;
```

**Variable Types**

| int               | 1, ,2, 500, 10000          |
| ----------------- | -------------------------- |
| float<br />double | 1.5, 3.14, 578.234         |
| boolean           | true, false                |
| string            | "Abanoub", "John", "Samy"  |
| ClassName         | Activity, TextView, .. etc |

**Control Flow**

```java
Boolean condition = true;
if (condition) {
} else {
}
int val = 5;
switch (val) {
 case 1:
 break;
 case 2:
 break;
 default:
 break;
}
for (int i = 0; i < 5; i++) {
}
```

**String Quick Example**

```java
String personOne = “Ray";
String personTwo = “Brian";
String combinedString = personOne + ":
Hello, “ + personTwo + “!”;
String tipString = “2499.00”;
Int tipInt =
Integer.parseInt(tipString);
double tipDouble =
Double.parseDouble(tipString);
```

**Array Quick Examples**

```java
String personOne = “Ray";
String personTwo = “Brian";
String [] array = {personOne,
personTwo};
for(String person : array) {
 Log.d(“person:”, person);
}
String ray = array[0];
```

**Dictionary Quick Examples**

```java
HashMap<String, String> map = new
HashMap<>();
map.put(“personOne”,”Ray”);
// updates old value if already exists
map.put(“personOne”,”Brian”);
map.put(“personTwo”,”Darryl”);
// remove value for key
map.remove(“personOne”);
// iterate through map
for(Map.Entry<String, String>
personEntry : map.entrySet()) {
Log.d(personEntry.getKey(),
personEntry.getValue());
}
```

