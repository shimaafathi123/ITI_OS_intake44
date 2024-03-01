#Write a two functions to calculate the area and the perimeter of a rectangle given its length and width.

def areaOfRectangle(length, width):
    return length * width

def perimeterOfRectangle(length, width):
    return 2 * (length + width)

length = float(input('Enter the length of rectangle: '))
width = float(input('Enter the width of rectangle: '))

if length <= 0 or width <= 0:
    print("Length and width must be greater than zero.")
else:
    print("The area of the rectangle is:", areaOfRectangle(length, width))
    print("The perimeter of the rectangle is:", perimeterOfRectangle(length, width))
