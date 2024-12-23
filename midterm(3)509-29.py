width = float(input("Enter pool width (meters): "))
length = float(input("Enter pool length (meters): "))
depth = float(input("Enter pool depth (meters): "))

volume = width * length * depth  
time_in_seconds = volume * 15  
time_in_minutes = time_in_seconds / 60  

print(f"Time to fill the pool: {time_in_minutes:.2f} minutes")
