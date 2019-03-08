def merge_sort(LIST):
    start = []
    end = []
    while len(LIST) > 1:
        a = min(LIST)
        b = max(LIST)
        start.append(a)
        end.append(b)
        LIST.remove(a)
        LIST.remove(b)
    if LIST: start.append(LIST[0])
    end.reverse()
    return (start + end)

print(merge_sort({10, 9, 8, 4, 5, 6, 13, 55, 72, 86, 100, 123, 7, 3, 2, 1}))
