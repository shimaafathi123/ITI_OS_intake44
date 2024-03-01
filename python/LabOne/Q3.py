#Write a function receive two strings and concatenate them with two different methods.

#firstMethod

def concateStrOne (strOne, strTwo):
    return strOne+" "+strTwo

#secondMethod
def concateStrTwo (strOne, strTwo):
    concateStr = " "
    return concateStr.join([strOne,strTwo])


strOne = input("Enter first string: ")
strTwo = input("Enter second string: ")

print(concateStrOne(strOne, strTwo))

strOne = input("Enter first string: ")
strTwo = input("Enter second string: ")

print(concateStrTwo(strOne, strTwo))