import re

def val(name):
    pattern = r'^[a-zA-Z]{3,}$'  
    
    if re.match(pattern, name):
        return True
    else:
        return False
