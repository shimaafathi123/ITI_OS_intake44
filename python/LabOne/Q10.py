#Write a function to reverse a given string

def reverseString(str):
    reversedStr = ""
    for i in range(len(str) - 1, -1, -1):
        reversedStr += str[i]
    return reversedStr

str = "shimaa"
print(reverseString(str))

        