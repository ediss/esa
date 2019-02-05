<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  1,
                    'img_url'      => 'images/partners/netent.png',
                    'position'     =>  1
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  2,
                    'img_url'      => 'images/partners/lucky-streak.png',
                    'position'     =>  2
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  3,
                    'img_url'      => 'images/partners/playson.png',
                    'position'     =>  3
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  4,
                    'img_url'      => 'images/partners/portomaso-gaming.png',
                    'position'     =>  4
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  5,
                    'img_url'      => 'images/partners/nyx.png',
                    'position'     =>  5
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }


        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  6,
                    'img_url'      => 'images/partners/isoftbet.png',
                    'position'     =>  6
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  7,
                    'img_url'      => 'images/partners/1x2-gaming.png',
                    'position'     =>  7
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  8,
                    'img_url'      => 'images/partners/habanero.png',
                    'position'     =>  8
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  9,
                    'img_url'      => 'images/partners/capecod.png',
                    'position'     =>  9
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  10,
                    'img_url'      => 'images/partners/xpg.png',
                    'position'     =>  10
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  11,
                    'img_url'      => 'images/partners/thunderkick.png',
                    'position'     =>  11
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  12,
                    'img_url'      => 'images/partners/gameart.png',
                    'position'     =>  12
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }


        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  13,
                    'img_url'      => 'images/partners/esa-poker.png',
                    'position'     =>  13
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }

        try{
            DB::table('partners')
            ->insert(
                [
                    'id_partner'   =>  14,
                    'img_url'      => 'images/partners/enada.png',
                    'position'     =>  14
                ]
            );
        } catch(\Exception $e) {
            echo "Image already exist!";
        }
    }
}
