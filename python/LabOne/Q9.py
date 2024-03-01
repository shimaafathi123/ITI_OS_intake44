#Write a function to check if a given number is even or odd.

def everOrOdd(num):
    if(num%2==0):
        print("Even")

    else:
        print("odd")

num = int(input("enter num : "))
everOrOdd(num)