<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Maisyah Corporation",
            "email" => "mua.unj@gmail.com",
            "username" => "maisyahcorp",
            "password" => bcrypt("bismillahberkah")
        ]);

        Category::create([
            "nama_kategori" => "Makanan"
        ]);
        Category::create([
            "nama_kategori" => "Minuman"
        ]);
        Category::create([
            "nama_kategori" => "Fashion"
        ]);
        Category::create([
            "nama_kategori" => "Aksesoris Muslimah"
        ]);
        Category::create([
            "nama_kategori" => "Herbal"
        ]);
        Category::create([
            "nama_kategori" => "Lain-lain"
        ]);

        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Promo',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Promo',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Promo',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 1,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Sale',
            'category_id' => 2,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 3,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'Hot',
            'category_id' => 4,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 5,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
        product::create([
            'nama_product' => 'Nama Produk',
            'info_product' => 'New',
            'category_id' => 6,
            'harga_product' => 'Rp9.000',
            'harga_coret_product' => 'Rp15.000',
            'gambar_product' => 'ProductUtama.jpg',
            'gambar_detailProduct1' => 'ProductDetail.jpg',
            'gambar_detailProduct2' => 'ProductDetail.jpg',
            'gambar_detailProduct3' => 'ProductDetail.jpg',
            'deskripsi_product' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id itaque incidunt molestiae ad neque vero quisquam possimus ex quibusdam perferendis magni non repellat laborum eaque dolores sapiente tenetur, soluta facilis, labore quae? Officia corporis, sapiente accusamus soluta voluptas praesentium adipisci! Qui velit eum dolore, amet recusandae voluptate atque natus nemo iusto iure laborum? Iure laborum mollitia dolores quidem molestiae, laudantium aspernatur, tempora quis quam quod itaque aliquid! Debitis qui error similique consequuntur nulla odit modi iusto sed, quia ex doloribus eligendi veritatis incidunt hic distinctio, ullam sapiente possimus eaque? Officia aperiam veniam iusto, reiciendis explicabo quisquam omnis commodi dolores!'
        ]);
    }
}
