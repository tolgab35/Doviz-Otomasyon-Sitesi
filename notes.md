### 1

## Problem Tanımı:

- Kullanıcıların kolay ve kullanışlı bir şekilde döviz alım-satım yapabileceği, para birimlerini birbiriyle karşılaştırabileceği, portfolyosunu görebileceği, içinde bir veritabanı bulunduran efektif bir web platformuna sahip olmaması.

## Çözüm:

- Kullanıcıların tüm bu ihtiyaçlarını karşılaması adına yapılmış, içerisinde kullanıcıların kayıt, cüzdan bilgilerinin ve döviz alım-satım miktarlarının tutulduğu bir veritabanını bünyesinde barındıran efektif bir şekilde tasarlanmış web tabanlı, kullanıcı dostu arayüzlü ve güvenli bir otomasyon oluşturulması.

### 2

## Karşılaşılan Sorunlar

- Veritabanının tasarlanması ve normalizasyonu
  Çözüm: Tasarım için MySql başlangıç dökümantasyonlarından yararlanıldı. https://dev.mysql.com/doc/
  Çözüm: Normalizasyon için 'geeksforgeeks' sitesinden faydalanıldı. https://www.geeksforgeeks.org/introduction-of-database-normalization/
  Çözüm: Ayrıca Veritabanı Yönetim Sistemleri ders materyallerinden faydalanıldı.

- Veritabanının web sitesine entegre edilmesi
  Çözüm: PHP sitesinden veritabanı entegrasyonu ile ilgili araştırma yapıldı. https://www.php.net/manual/en/book.pdo.php

- API'den aldığımız döviz kurlarının veritabanına aktarılamaması
  Çözüm: GitHub deposundan öğrenilen 'Web Scrapper' yöntemi kullanılarak bir döviz sitesi aracılığıyla güncel döviz kurları veritabanına aktarıldı. https://github.com/FriendsOfPHP/Goutte https://kur.doviz.com/

- Web sitesinin arayüzünün efektif bir şekilde tasarlanması
  Çözüm:
  Başlangıç olarak beyin fırtınası yapılarak sınıf tahtasında wireframe, ardından sitemap oluşturuldu. https://www.freecodecamp.org/news/ui-ux-design-guide/
  doviz.com, bigpara.com, investing.com gibi sitelerin incelenmesi sonucu sitelerden ilham alındı.
  UI/UX araştırması yapılıp penpot sitesi üzerinden mockup oluşturuldu. https://penpot.app/

- Kullanıcıların şifre güvenliği
  Çözüm: Kullanıcı parolalarını veritabanında güvenli bir şekilde saklamak amacıyla bcrypt hashleme algoritması kullanıldı. https://www.php.net/manual/en/function.password-hash.php

-
