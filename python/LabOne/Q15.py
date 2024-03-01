"""Create a Python function that takes a list of numbers, 
performs various operations (sum, minimum, maximum, squared list), 
and returns a new list containing the results"""

def listOperations(li):
    sum=0
    min=li[0]
    max=li[0]
    li2=[]
    for i in range(len(li)):
        sum+=li[i]
        li2.append(li[i]**2)
        if li[i]<min:
            min=li[i]
        if li[i]>max:
            max= li[i]
    print("sum= ", sum)
    print(li2)
    print("min= ",min)
    print("max= ", max)
    
listOperations([1,2,3,4,5,6,7])

        
