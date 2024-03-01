#Write a function that removes even numbers from a list and squares the remaining odd numbers

def removeFromList(li):
    li2 = []
    for num in li:
        if num % 2 != 0:  
            li2.append(num ** 2)  
    return li2

li = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print(removeFromList(li))
