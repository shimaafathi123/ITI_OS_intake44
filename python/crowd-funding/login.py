import register

user_projects = {}

def login(users_list):
    email = input("Enter your email address 😃 ")
    password = input("Enter your password 😃 ")

    for user in users_list:
        if user["email"] == email and user["password"] == password:
            print("Login successful! Welcome back,", user["first_name"])
            return user  # Return the logged-in user
    
    print("Invalid email or password. Please try again.")

def create_campaign(user):
    title = input("Enter the title of your campaign: ")
    details = input("Enter the details of your campaign: ")
    total_target = input("Enter the total target amount (e.g., 250000 EGP): ")
    start_time = input("Enter the start time of the campaign (YYYY-MM-DD HH:MM): ")
    end_time = input("Enter the end time of the campaign (YYYY-MM-DD HH:MM): ")

    campaign_data = {
        "title": title,
        "details": details,
        "total_target": total_target,
        "start_time": start_time,
        "end_time": end_time
    }

    user_email = user["email"]
    if user_email not in user_projects:
        user_projects[user_email] = []
    user_projects[user_email].append(campaign_data)

    print("Campaign created successfully!")

def edit_project(user):
    view_projects(user)
    project_idx = int(input("Enter the project number you want to edit: ")) - 1
    if project_idx < 0 or project_idx >= len(user_projects[user["email"]]):
        print("Invalid project number.")
        return
    
    # Provide options to edit project details
    print("Select what you want to edit:")
    print("1. Title")
    print("2. Details")
    print("3. Total Target")
    print("4. Start Time")
    print("5. End Time")
    choice = int(input("Enter your choice: "))
    
    project = user_projects[user["email"]][project_idx]
    if choice == 1:
        project["title"] = input("Enter the new title: ")
    elif choice == 2:
        project["details"] = input("Enter the new details: ")
    elif choice == 3:
        project["total_target"] = input("Enter the new total target: ")
    elif choice == 4:
        project["start_time"] = input("Enter the new start time: ")
    elif choice == 5:
        project["end_time"] = input("Enter the new end time: ")
    else:
        print("Invalid choice.")

    print("Project updated successfully!")

def view_projects(user):
    print("All projects in the system:")
    for email, projects in user_projects.items():
        print(f"Projects for {email}:")
        for idx, project in enumerate(projects, start=1):
            print(f"Project {idx}:")
            for key, value in project.items():
                print(f"{key.capitalize()}: {value}")
            print()

# Example usage
while True:
    logged_in_user = None
    for user in register.users:
        if login([user]):
            logged_in_user = user
            break
    
    if logged_in_user:
        choice = input("Do you want to create a new project or edit an existing one? (create/edit): ").lower()
        if choice == 'create':
            create_campaign(logged_in_user)
        elif choice == 'edit':
            edit_project(logged_in_user)
        else:
            print("Invalid choice.")

        view_projects(logged_in_user)

    choice = input("Do you want to login again? (yes/no): ").lower()
    if choice != 'yes':
        break
