val numbers = listOf(1, -2, 3, -4, 5, -6)      // 1

val positives = numbers.filter { x -> x > 0 }  // 2

val negatives = numbers.filter { it < 0 }      // 3
