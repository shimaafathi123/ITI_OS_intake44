def add_proj(project_information):
    info = "-".join(project_information)
    with open(f"projects.txt", "a") as file_project:
        data = info.strip("\n")
        data = f"{data}\n"
        file_project.write(data)
        print("Congrats!💥  you have added project now Back To Menu.......")
    return
