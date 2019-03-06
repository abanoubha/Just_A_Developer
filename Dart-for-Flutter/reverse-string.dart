void main(List<String> args) {
    print( reverse(args[0]) );
}
String reverse(input) {
    return input.split('').reversed.join();
}
