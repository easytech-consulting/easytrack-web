<?php

use App\Employee;
use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(\App\User::class, 4)->create();
        // factory(\App\Company::class, 4)->create();
        // factory(\App\Site::class, 30)->create();
        // factory(\App\Supplier::class, 40)->create();
        // factory(\App\Category::class, 5)->create();
        // factory(\App\Product::class, 30)->create();

        $this->call([
            TypeSeeder::class,
            PermissionTableSeeder::class,
            RoleTableSedder::class,
            UserTableSeeder::class,
            ActivityTableSeeder::class
        ]);


        // Replissage de la table role_user
        App\User::all()->each(function($user){
            $user->role_id = App\Role::all()->random()->id;
            $user->save();
        });

        // Remplissage de la table activity_product
        // App\Product::all()->each(function($product){
        //     $product->activities()->attach(1);
        // });

        // Remplissage de la table subscriptions
        // App\Company::all()->each(function($company){
        //     $type = App\Type::all()->random();
        //     $company->types()->attach($type->id, [
        //         'end_date' => \Carbon\Carbon::now()->addDays($type->duration),
        //     ]);
        // });

        // Replissage de la table product_site

        // foreach (App\Site::all() as $site) {

        //     $products = App\Product::all('id')->random(rand(10,25));
        //     foreach ($products as $prod) {
        //         $price = rand(4,20)*150;
        //         $cost = $price - $price * 0.1;
        //         $site->products()->attach($prod->id,[
        //             'price' => $price,
        //             'cost' => $cost,
        //             'qty' => rand(20, 30),
        //             'qty_alert' => 5,
        //         ]);
        //     }

        //     $suppliers = App\Supplier::all()->random(rand(10,20));
        //     foreach ($suppliers as $supl) {
        //         $supl->site_id = $site->id;
        //         $supl->save();
        //     }

        //     App\Customer::create([
        //         'name' => 'Passager',
        //         'street' => $site->street,
        //         'town' => $site->town,
        //         'site_id' => $site->id
        //     ]);
        // };

        // Initialisation des roles et permissions

        foreach (Employee::all() as $emp) {

            if($emp->user->role->slug == 'cashier'){
                $emp->user->role_id = 1;
                $emp->user->save();
            } elseif($emp->user->role->slug == 'server'){
                $emp->user->role_id = 2;
                $emp->user->save();
            } elseif($emp->user->role->slug == 'storekeeper'){
                $emp->user->role_id = 3;
                $emp->user->save();
            } elseif($emp->user->role->slug == 'manager'){
                $emp->user->role_id = 4;
                $emp->user->save();
            }elseif($emp->user->role->slug == 'boss'){
                $emp->user->role_id = 5;
                $emp->user->save();
            }
        }

        foreach(Role::all() as $role){
            $role->permissions()->detach();
        }

        Schema::disableForeignKeyConstraints();
        Permission::truncate();
        Role::truncate();
        Schema::enableForeignKeyConstraints();


        $permissions = [
            ['name' => 'Consulter les employés', 'slug' => 'show_employee'],
            ['name' => 'Gérer les employés', 'slug' => 'manage_employee'],
            ['name' => 'Supprimer un utilisateur', 'slug' => 'user_delete'],

            ['name' => 'Consulter les permissions', 'slug' => 'show_permissions'],
            ['name' => 'Gérer le rôle et les Permisisons', 'slug' => 'manage_role_and_permissions'],

            ['name' => 'Consulter les bons de commandes', 'slug' => 'show_purchase_orders'],
            ['name' => 'Imprimer les bons de commande', 'slug' => 'print_purchase_orders'],
            ['name' => 'Etablir les bons de commande', 'slug' => 'create_purchase_orders'],
            ['name' => 'Valider les bons de commande', 'slug' => 'validate_purchase_orders'],
            ['name' => 'Supprimer les bons de commande', 'slug' => 'delete_purchase_orders'],

            ['name' => 'Consulter les commandes clientes', 'slug' => 'show_sale_orders'],
            ['name' => 'Imprimer les commandes clientes', 'slug' => 'print_sale_orders'],
            ['name' => 'Etablir les commandes clientes', 'slug' => 'create_sale_orders'],
            ['name' => 'Valider les commandes clientes', 'slug' => 'validate_sale_orders'],
            ['name' => 'Supprimer les commandes clientes', 'slug' => 'delete_sale_orders'],

            ['name' => 'Gérer le site', 'slug' => 'manage_site'],


            ['name' => 'Consulter la liste de produits', 'slug' => 'show_products'],
            ['name' => 'Modifier les produits', 'slug' => 'update_products'],
            ['name' => 'Supprimer les produits', 'slug' => 'delete_products'],


            ['name' => 'Consulter la liste des fournisseurs', 'slug' => 'show_suppliers'],
            ['name' => 'Modifier les fournisseurs', 'slug' => 'update_suppliers'],
            ['name' => 'Supprimer les fournisseurs', 'slug' => 'delete_suppliers'],

            ['name' => 'Consulter la liste des clients', 'slug' => 'show_customers'],
            ['name' => 'Modifier les clients', 'slug' => 'update_customers'],
            ['name' => 'Supprimer les clients', 'slug' => 'delete_customers'],

            ['name' => 'Consulter les équipes de travail', 'slug' => 'show_teams'],
            ['name' => 'Gérer les équipes de travail', 'slug' => 'manage_teams'],
            ['name' => 'Supprimer une équipe de travail', 'slug' => 'delete_team'],

            ['name' => 'Gérer les charges', 'slug' => 'manage_expenses'],
        ];

        DB::table('permissions')->insert($permissions);


        $roles = [
            ['name' => 'Caissier', 'slug' => 'cashier'],
            ['name' => 'Serveur', 'slug' => 'server'],
            ['name' => 'Magasinier', 'slug' => 'storekeeper'],
            ['name' => 'Gérant', 'slug' => 'manager'],
            ['name' => 'Directeur', 'slug' => 'boss'],
        ];

        DB::table('roles')->insert($roles);

        Role::whereSlug('server')->first()->permissions()->attach([11, 12, 13]);
        Role::whereSlug('cashier')->first()->permissions()->attach([6, 7, 8, 9, 11, 12, 13, 14, 17, 18, 20, 21, 22, 23, 24, 25, 26]);
        Role::whereSlug('storekeeper')->first()->permissions()->attach([6, 7, 8, 9, 17, 18, 20, 21, 22, 26]);
        Role::whereSlug('manager')->first()->permissions()->attach([1, 2, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 16, 17, 18, 20, 21, 22, 23, 24, 25, 26, 27, 28]);
        Role::whereSlug('boss')->first()->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]);

    }
}
