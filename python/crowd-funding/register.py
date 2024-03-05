import re
import validate_name
import validate_email
import validate_password

registered_emails = set()
registered_mobiles = set()

def get_input(prompt, validation_function):
    while True:
        user_input = input(prompt)
        if validation_function(user_input):
            return user_input
        else:
            print("Invalid input🚫 Please try again ")

def registration(users_list):
    first_name = get_input("Enter your first name 😃 ", validate_name.val)
    last_name = get_input("Enter your last name 😃 ", validate_name.val)
    
    while True:
        email = get_input("Enter your email address 😃 ", validate_email.val)
        if email in registered_emails:
            print("Email address already registered. Please use a different email address.")
        else:
            registered_emails.add(email)
            break
    
    password = get_input("Enter your password 😃 ", validate_password.val)
    confirm_password = get_input("Confirm your password 😃 ", lambda x: x == password)
    
    while True:
        mobile_phone = get_input("Enter your mobile phone number (Egyptian phone number) 😃 ", lambda x: re.match(r"01[0125]{1}[0-9]{8}", x))
        if mobile_phone in registered_mobiles:
            print("Mobile phone number already registered. Please use a different phone number.")
        else:
            registered_mobiles.add(mobile_phone)
            break
    
    user_data = {
        "first_name": first_name,
        "last_name": last_name,
        "email": email,
        "password": password,
        "mobile_phone": mobile_phone
    }
    
    users_list.append(user_data)
    print("User registration successful! Details:")
    print(user_data)

# Example usage
users = []

while True:
    registration(users)
    choice = input("Do you want to register another user? (yes/no): ").lower()
    if choice != 'yes':
        break

print("All users registered:", users)
