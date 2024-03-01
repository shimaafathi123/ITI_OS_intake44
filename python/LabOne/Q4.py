#Write a function receive list of values , square each element in a given list and return the squared list

def squareListElements(li):
    for i in range(len(li)):
        li[i] = li[i] * 2
    return li


li = [1, 2, 3, 4, 5, 6]

print("Your list after square function: ")
li = squareListElements(li)
print(li)
