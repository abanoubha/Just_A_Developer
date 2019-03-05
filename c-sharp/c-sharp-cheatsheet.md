# C# Cheatsheet
This is a general knowledge of C# to remind you of C# things.

## What is C# ?
- It is a general purpose object-oriented programming language
- Created by Microsoft
- Part of the many languages used with .NET
- Relatively easy to learn

## What is .NET ?
- framework for building windows applications (and web apps)
- not limited to **C#**
- other include **VB.net, f#, c++/CLI and much more**
- consists of **CLR** (Common Language Runtime) & **Class Library**

## What is CLR ?
- virtual machine component
- manages execution of **.NET** programs
- **JIT** converts compiled code into machine instruction
- also includes things like memory and thread management
- all .NET programs are executed by CLR

## Using IDE
- an IDE is an Integrated Development Environment
- text/code editor on steroids
- we can using [Visual Studio Community](https://visualstudio.com)
- build & compile tools

## default code of `Program.cs`
```csharp
using System;
namespace ProgramName
{
	class Program
	{
		static void Main(string[] args)
		{
			//code goes here
		}
	}
}
```
## print something on the console/commad prompt
```csharp
Console.WriteLine("Hello, World!");
```

## C Sharp variable
```csharp
string name = "Abanoub Hanna";
//print my name on console
Console.WriteLine(name);
```

## string concatenation
```csharp
string name = "Abanoub";
Console.WriteLine("My name is " + name);
//or by place holders
int age = 25;
Consolr.WriteLine("My name is {0}, and my age is {1}", name, age);
```

## change text color in console
```csharp
//change text on the console to Green
Console.ForegroundCOlor = ConsoleColor.Green;
```
All text will be green, but we can reset back to default after showing our text.
```csharp
Console.ForegroundColor = Console.Green;
Console.WriteLine("the color of this text is green");
Console.ResetColor();
```

## get input from a user
```csharp
string input - Console.ReadLine();
Console.WriteLine("You write {0}",input);
```

## while loop
```csharp
int correctNumber = 7;
int guess = 0;
while(guess != correctNumber){
	string guessing = Console.ReadLine();
	guess = Int32.parse(guessing);
	
	if(gues != correctNumber){
		Console.WriteLine("Wrong Number! Try Again!");
	}
}
//it'll keep asking you until you write the correctNumber
```

## check the type of the user input
```csharp
string input = Console.ReadLine();
//make sure it is a number
if(!int.TryParse(input, out guess)) {
	Console.WriteLine("Please Enter An Actual Number!");
}
```

## generate a random number
```csharp
//create random object
Random random = new Random();

//generate the number between 1 and 10
int correctNum = random.Next(1, 10);

//show the randomly generated number
Console.WriteLine(correctNum);
```

## If else statement
```csharp
string answer = "Y";

if(answer == "Y"){
	Console.WriteLine("it's Y");
}else{
	Console.WriteLine("it's not Y");
}
```

## function
```csharp
//call the funtion
GetAppInfo();

//the function
static boid GetAppInfo(){
	Console.WriteLine("Software version 1.0 by Abanoub Hanna");
}
```
To see a function with parameter, see the `print color message` below.

## print color message
```csharp
static void PrintColoredMsg(ConsoleColor color, string msg){
	Console.ForegroundCOlor = color;
	Console.WriteLine(msg);
	Console.ResetColor();
}

//call it
PrintColoredMsg(ConsoleColor.Red, "this is the message");

```

## What's Next?
This cheatsheet will be updated with more info and code snippets later.
