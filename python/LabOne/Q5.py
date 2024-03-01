#Implement a program to merge two dictionaries and return the result

def mergeDictionaries (dictOne, dictTwo):
    mergedDict = {}
    for key, value in dictOne.items():
        mergedDict[key] = value
    
    for key, value in dictTwo.items():
        mergedDict[key] = value
    
    return mergedDict

dictOne = {"firstLetter":'a', "secondLetter":'b'}

dictTwo = {"firstLetterCap":'A', "secondLetterCap":'B'}

print(mergeDictionaries(dictOne, dictTwo))