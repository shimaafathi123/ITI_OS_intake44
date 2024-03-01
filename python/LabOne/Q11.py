#Write a function to check if a given string is a palindrome (reads the same backward as forward)

def reverseString(str):
    reversedStr = ""
    for i in range(len(str) - 1, -1, -1):
        reversedStr += str[i]
    return reversedStr


str = "abba"
if str == reverseString(str):
    print("it is a palindrome")
else:
    print("it is NOT a palindrome")

        