<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Bertrand Stiedemann',
                'email' => 'nienow.gunnar@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '3RClmlMQtU',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            1 => 
            array (
                'name' => 'Demetris Pagac V',
                'email' => 'gerlach.hayley@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'cPrLZlFirb',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            2 => 
            array (
                'name' => 'Karl Grady III',
                'email' => 'rosa.pfeffer@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'DlboFYe9K4',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            3 => 
            array (
                'name' => 'Jolie Wilderman Sr.',
                'email' => 'jonatan15@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'OploYgfZp5',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            4 => 
            array (
                'name' => 'Prof. Antwon Lesch Jr.',
                'email' => 'alec30@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'aQfCcLKJxc',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            5 => 
            array (
                'name' => 'Alan Douglas',
                'email' => 'ziemann.judah@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'S1PKXFHwec',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            6 => 
            array (
                'name' => 'Zoey Waelchi',
                'email' => 'pagac.keon@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'zpAUrbJZNT',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            7 => 
            array (
                'name' => 'Misty Morissette',
                'email' => 'reynolds.melany@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Net1CGDFah',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            8 => 
            array (
                'name' => 'Carlee Feil',
                'email' => 'nkuhlman@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Ra2PavmkD6',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            9 => 
            array (
                'name' => 'Mr. Kobe Lang MD',
                'email' => 'ebert.shane@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Jf973rN56n',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            10 => 
            array (
                'name' => 'Ahmed Adel',
                'email' => 'user@mytodos.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'GliOYpKbWe',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            11 => 
            array (
                'name' => 'Fae Trantow Sr.',
                'email' => 'ostokes@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'nbR9zQdBWt',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            12 => 
            array (
                'name' => 'Rosario Wolff',
                'email' => 'aufderhar.collin@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'J59kW4pF1N',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            13 => 
            array (
                'name' => 'Tyra Hermiston',
                'email' => 'conroy.laney@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 't703jP3RSj',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            14 => 
            array (
                'name' => 'Mallory Legros',
                'email' => 'tyundt@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'bX7oCMimHV',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            15 => 
            array (
                'name' => 'Haskell Eichmann IV',
                'email' => 'dean75@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'jIsNh8rRxz',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            16 => 
            array (
                'name' => 'Myles Hyatt Jr.',
                'email' => 'opowlowski@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'VhZhtFcUZ7',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            17 => 
            array (
                'name' => 'Samara Franecki',
                'email' => 'ubogan@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'kVKT6pI7qX',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            18 => 
            array (
                'name' => 'Prof. Roman Anderson',
                'email' => 'ernie51@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'OgOMENJNYW',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            19 => 
            array (
                'name' => 'Hadley Ferry',
                'email' => 'rkertzmann@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'RPgy0SkuUK',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            20 => 
            array (
                'name' => 'Isaac Emard',
                'email' => 'bahringer.kayleigh@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'rORrd466wQ',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            21 => 
            array (
                'name' => 'Mr. Dagmar Marvin II',
                'email' => 'edwina09@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HRes6bqZGh',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            22 => 
            array (
                'name' => 'Joel Leuschke II',
                'email' => 'umraz@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'p1FOm524lx',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            23 => 
            array (
                'name' => 'Prof. Willis Gottlieb Jr.',
                'email' => 'nhoeger@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '0VQhcv0WRI',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            24 => 
            array (
                'name' => 'Mr. Garth Bosco',
                'email' => 'zbartoletti@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'aWflHHeU4f',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            25 => 
            array (
                'name' => 'Mr. Nathan Macejkovic V',
                'email' => 'tstracke@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'LCZvjPZN2z',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            26 => 
            array (
                'name' => 'Garth Dibbert',
                'email' => 'madge.heller@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'aUKiYAA79O',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            27 => 
            array (
                'name' => 'Dr. Cordie O\'Hara',
                'email' => 'caroline.lind@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'JdjuLX677X',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            28 => 
            array (
                'name' => 'Raphael O\'Hara',
                'email' => 'kuhic.werner@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'C9gNqM2TRp',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            29 => 
            array (
                'name' => 'Estell Fritsch III',
                'email' => 'mose.west@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'XRB33A6fLz',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            30 => 
            array (
                'name' => 'Miss Bria Kihn Sr.',
                'email' => 'lessie86@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Wa2FF8n2n6',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            31 => 
            array (
                'name' => 'June Raynor',
                'email' => 'golda62@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'FyIRXDGeWI',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            32 => 
            array (
                'name' => 'Craig Ankunding',
                'email' => 'deondre17@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'rKFxfUQDCp',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            33 => 
            array (
                'name' => 'Solon Ziemann',
                'email' => 'esmeralda.lindgren@example.net',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'qNGzRvuIFS',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            34 => 
            array (
                'name' => 'Thora Bednar',
                'email' => 'madonna10@example.org',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'gXRU9ioTfM',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            35 => 
            array (
                'name' => 'Carey Cassin',
                'email' => 'vrau@example.com',
                'email_verified_at' => '2022-06-19 22:59:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'BeDWWwKKzM',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            36 => 
            array (
                'name' => 'Presley Pfeffer',
                'email' => 'dokeefe@example.com',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '1qXC4ErG3H',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            37 => 
            array (
                'name' => 'George Daugherty',
                'email' => 'kutch.rozella@example.org',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'y4SkW8opsR',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            38 => 
            array (
                'name' => 'Claudia Lind',
                'email' => 'tullrich@example.org',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ZhoqVkvuYc',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            39 => 
            array (
                'name' => 'Terrill Krajcik',
                'email' => 'rae12@example.org',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'sG4SazGkBz',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            40 => 
            array (
                'name' => 'Emelie Harber Sr.',
                'email' => 'joel.crona@example.net',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'zp3T6eaNDW',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            41 => 
            array (
                'name' => 'Miss Georgianna Larkin II',
                'email' => 'collins.alisha@example.net',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ur8Lh4xepr',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            42 => 
            array (
                'name' => 'Prof. Josiah Ondricka',
                'email' => 'rohan.elmer@example.org',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'jgQdRj5N7s',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            43 => 
            array (
                'name' => 'Krista Gerhold DVM',
                'email' => 'schultz.brennon@example.net',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'bHeUrcGypv',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            44 => 
            array (
                'name' => 'Mackenzie Beatty',
                'email' => 'flatley.abbigail@example.net',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'hOZf3kQygb',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            45 => 
            array (
                'name' => 'Dr. Leland Botsford',
                'email' => 'dashawn.luettgen@example.com',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'dRlvlgFV0l',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            46 => 
            array (
                'name' => 'Mekhi Hayes',
                'email' => 'jewel51@example.net',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'uCmqZ94O2V',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
            47 => 
            array (
                'name' => 'Doug Collier PhD',
                'email' => 'barton75@example.net',
                'email_verified_at' => '2022-06-19 22:59:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'LWBh4EMA5l',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
                'google_id' => NULL,
                'avatar' => NULL,
            ),
        ));
        
        
    }
}