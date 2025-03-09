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



