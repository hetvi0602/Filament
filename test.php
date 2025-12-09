✅ Filament Installation & Setup Steps (Laravel)
  
1.create Laravel project v-10
      
   composer create-project "laravel/laravel:^10.0" example-app
  (after setup database .env )

2.composer require filament/filament
  php artisan filament:install --panels


🟩 Step 2: Create an Admin User
         php artisan make:filament-user
  

   🟩 How to create CRUD
    	
  1.Model + Migration   (manually)
   
  2.php artisan make:filament-resource Category(Model name) --generate
    
      
