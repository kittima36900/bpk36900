Python 3.10.5 (tags/v3.10.5:f377153, Jun  6 2022, 16:14:13) [MSC v.1929 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
province =("กรุงเทพมหานคร","กาฬสินธุ์","กาญจนบุรี","จันทบุรี","ฉะเชิงเทรา","ชลบุรี","พะเยา","ชุมพร","ชัยนาท","ขอนแก่น","ชัยภูมิ","ยโสธร","นครพนม","นครราชสีมา","เชียงใหม่")
changes ={"กรุงเทพมหานคร": "bangkok" , "นครราชสีมา": "korat" , "ฉะเชิงเทรา": "part riw" , "ชลบุรี":"chon buri" , "ชุมพร" : "chum porn" }
result = [changes[item] for item in province if item in changes]
print(result)
['bangkok', 'part riw', 'chon buri', 'chum porn', 'korat']
