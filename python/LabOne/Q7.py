"""Write a function to check if these keys (job, card_number) 
exists in this dictionary {"name": "jone", "email": "jane@outlook.com", "age": 25,
"job": "engineer", "address": "cairo, Egypt"}"""

def ifExist(dict, keyOne, keyTwo):
    keyOneFlag = 0 
    keyTwoFlag=0
    for key in dict.keys():
        if key == keyOne:
            keyOneFlag=1

        if key == keyTwo:
            keyTwoFlag=1
            
    if keyOneFlag:
        print(keyOne, "is in keys")
    else:
        print(keyOne, "is NOT in keys")
    if keyTwoFlag:
        print(keyTwo, "is in keys")
    else:
        print(keyTwo, "is NOT in keys")

dict = {"name": "jone", "email": "jane@outlook.com", "age": 25, "job": "engineer", "address": "cairo, Egypt"}
ifExist(dict,"job", "card_number")