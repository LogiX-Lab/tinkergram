

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_general_ci NOT NULL,
  `abilities` text COLLATE utf8_general_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `connection` text COLLATE utf8_general_ci NOT NULL,
  `queue` text COLLATE utf8_general_ci NOT NULL,
  `payload` longtext COLLATE utf8_general_ci NOT NULL,
  `exception` longtext COLLATE utf8_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `description` text COLLATE utf8_general_ci,
  `image` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `caption` text COLLATE utf8_general_ci NOT NULL,
  `url` text COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8_general_ci NOT NULL,
  `caption` text COLLATE utf8_general_ci NOT NULL,
  `delivery_method` text COLLATE utf8_general_ci,
  `service_quality` text COLLATE utf8_general_ci,
  `ingredient_supply` text COLLATE utf8_general_ci,
  `online_booking` text COLLATE utf8_general_ci,
  `event_booking` text COLLATE utf8_general_ci,
  `fresh_made` text COLLATE utf8_general_ci,
  `url` text COLLATE utf8_general_ci NOT NULL,
  `address` text COLLATE utf8_general_ci NOT NULL,
  `contact_info` text COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` text COLLATE utf8_general_ci NOT NULL,
  `type` text COLLATE utf8_general_ci NOT NULL,
  `image_url` text COLLATE utf8_general_ci NOT NULL,
  `description` text COLLATE utf8_general_ci,
  `supplier_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_supplier_id_foreign` (`supplier_id`),
  CONSTRAINT `products_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caption` text COLLATE utf8_general_ci,
  `image_url` text COLLATE utf8_general_ci,
  `description` text COLLATE utf8_general_ci NOT NULL,
  `tags` text COLLATE utf8_general_ci,
  `points` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `following_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_product_id_foreign` (`product_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;





