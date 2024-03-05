def insert(user_information):
    user_information = "-".join(user_information)
    with open("user_data.txt", "a") as user_file:
        data = user_information.strip("\n")
        data = f"{data}\n"
        user_file.write(data)
        print("You Have Register Successfully 🥳, You will back to Main Menu to login !")

