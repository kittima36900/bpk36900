def find_minimum(numbers):
    return min(numbers)  


numbers = []  
for i in range(5):
    num = int(input(f"กรอกตัวเลขตัวที่ {i+1}: "))  
    numbers.append(num) 


print("ค่าต่ำสุดคือ:", find_minimum(numbers))