#Write a function receive two lists and merge them

def mergeLists (listOne, listTwo):
    mergedList = []
    for i in range(len(listOne)):
        mergedList.append(listOne[i])
    
    for i in range(len(listTwo)):
        mergedList.append(listTwo[i])
    
    return mergedList

listOne =  [1,2,3,4,5,6]
listTwo = [7,8,9,10]

print(mergeLists(listOne, listTwo))