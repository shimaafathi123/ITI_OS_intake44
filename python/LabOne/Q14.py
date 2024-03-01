#Write a function to calculate the factorial of a given number

def factorial(num):
    facto=1
    for i in range(1,num+1):
        facto*=i
    return facto

print(factorial(5))