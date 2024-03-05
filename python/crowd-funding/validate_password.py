import re

def val(password):
    if (len(password) >= 8 and
            re.search(r'[A-Z]', password) and
            re.search(r'[a-z]', password) and
            re.search(r'\d', password) and
            re.search(r'[!@#$%^&*()_+{}|:"<>?`~\-=\[\]\\;\',./]', password)):
        return True
    else:
        return False

