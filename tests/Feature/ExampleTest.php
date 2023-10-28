<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Hashing\HashManager;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_home(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
     */
    public function test_historia(): void
    {
        $response = $this->get('/historia');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
     */
    public function test_contacto(): void
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
     */
    public function test_avisolegal(): void
    {
        $response = $this->get('/aviso-legal');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
     */
    public function test_politicacookies(): void
    {
        $response = $this->get('/politica-cookies');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
     */
    public function test_politicaprivacidad(): void
    {
        $response = $this->get('/politica-privacidad');

        $response->assertStatus(200);
    }

        /**
     * A basic test example.
    */
     public function test_contact(): void
     {


         $data = [
            'email' => 'test@test.es',
            'password' => '12345678',
             'name' => 'test'
         ];
         $response = $this->post('/validar-registro', $data);

         $response->assertStatus(302)
         ->assertRedirect(route("mi-cuenta"));

     }
     

     
        /**
     * A basic test example.
     */
    public function test_validatelogin(): void
    {

        $data = [
            'email' => 'admin@admin.es',
            'password' => '12345678'
        ];

        $response = $this->post('/inicia-sesion', $data);
        $this->assertCredentials($data);//verifica los credenciales si no serian estos daria error

        $response->assertStatus(302)
        ->assertRedirect(route("mi-cuenta"));

    }


            /**
     * A basic test example.
     */
    public function test_login(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }


        /**
     * A basic test example.
     */
    public function test_registro(): void
    {
        $response = $this->get('/registro');

        $response->assertStatus(200);
    }



        /**
     * A basic test example.
     */
    public function test_logout(): void
    {
        $response = $this->get('/logout');

        $response->assertStatus(302)
        ->assertRedirect(route('login'));
    }

        /**
     * A basic test example.
     */
    public function test_micuenta(): void
    {
        $response = $this->get('/mi-cuenta');

        $response->assertStatus(302)->assertRedirect(route('login'));
    }



        /**
     * A basic test example.
     */
    public function test_recetas(): void
    {
        $response = $this->get('/recetas');

        $response->assertStatus(200);
    }


        /**
     * A basic test example.
     */
    public function test_formualrio(): void
    {

        $data = [
            'Nombre' => 'Catalina',
            'Consulta' => 'Prueba 1'
        ];
        $response = $this->post('/contacto/formualrio', $data);

        $response->assertStatus(302)
        ->assertRedirect(route("contacto"));


    }


        /**
     * A basic test example.
     */
    public function test_creareceta(): void
    {


        $response = $this->withoutMiddleware('auth');


        $recipe = [
            'titulo' => 'test',
            'contenido' => 'test'
        ];
        $response = $this->post('/crear-receta', $recipe);
        
        $response->assertStatus(302)
        ->assertRedirect(route("mi-cuenta"));




    }

}
