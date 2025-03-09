## Aplikasi Monitoring BMI

### Fitur
- Analisis Berat Badan dan Pola Hidup
- Monitoring Pola Hidup
- Rekomendasi Pola Kegiatan Harian

### Clone dan Menjalankan Program
##### Clone Program
```
git clone https://github.com/ASNProject/dss_bmi.git
``` 

##### Menjalankan Program
- Buat database dengan nama ```db_bmi``` di phpMyAdmin
- Import table yang ada dalam folder mysql ke dalam database yang sudah dibuat
- Jalankan perintah berikut:
```
composer update 
php artisan serve
```
- Selanjutnya buka link server:
```
http://127.0.0.1:8000
```

### Menambahkan Data Menggunakan API
##### Menambahkan Data Penyakit
- API : ```api/disease-history```
- Header : 
```
Key: Content-Type
Value: application/json
```
- body :
```
{
    'disease': 'Masukkan nama penyakit'
}
```
##### Menambahkan Data Pola Makan
- API : ```api/eating-habit```
- Header : 
```
Key: Content-Type
Value: application/json
```
- body :
```
{
    'eating_habit': 'Masukkan pola makan'
}
```

##### Menambahkan Data Pola Tidur
- API : ```api/sleep-pattern```
- Header : 
```
Key: Content-Type
Value: application/json
```
- body :
```
{
    'sleep_pattern': 'Masukkan pola tidur'
}
```

##### Menambahkan Data Rekomendasi Pola Makan
- API : ```api/eat-recommendation```
- Header : 
```
Key: Content-Type
Value: application/json
```
- body :
```
{
    "bmi_category": "obesity", // underweight, normal, overweight, obesity
    "recommendation": "Masukkan data rekomendasi pola makan"
}
```

##### Menambahkan Data Rekomendasi Pola Tidur
- API : ```api/sleep-recommendation```
- Header : 
```
Key: Content-Type
Value: application/json
```
- body :
```
{
    "bmi_category": "obesity", // underweight, normal, overweight, obesity
    "recommendation": "Masukkan data rekomendasi pola tidur"
}
```

##### Menambahkan Data Rekomendasi Aktivitas Fisik
- API : ```api/activity-recommendation```
- Header : 
```
Key: Content-Type
Value: application/json
```
- body :
```
{
    "bmi_category": "obesity", // underweight, normal, overweight, obesity
    "recommendation": "Masukkan data rekomendasi aktivitas fisik"
}
```

### Screenshoot

![Image](https://github.com/user-attachments/assets/fa03f353-ef6e-42e1-b3d6-086637c06148)

![Image](https://github.com/user-attachments/assets/e4f176e7-0c14-4d5d-a998-d6d742e11d3b)

![Image](https://github.com/user-attachments/assets/4b36e51e-4b5e-4920-bdec-7592a37d8e56)

![Image](https://github.com/user-attachments/assets/425a8ad0-e817-460d-95b4-3d63e75b111a)

![Image](https://github.com/user-attachments/assets/03a8a693-0fbd-4c96-badc-a2d62bd380c6)

![Image](https://github.com/user-attachments/assets/e1807675-91de-43c3-81a8-4e4b756fc832)

![Image](https://github.com/user-attachments/assets/f348a8e5-bd37-45cc-8159-076604d4f3bb)

![Image](https://github.com/user-attachments/assets/514091e4-46b7-47e0-9317-8711922299c8)

