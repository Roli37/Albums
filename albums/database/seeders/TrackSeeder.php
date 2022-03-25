<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Track;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $backInBack = Album::where("title", "=","Thriller" )->firstOrFail();
        $thriller = Album::where("title", "=","Back in Black" )->firstOrFail();
        $bat = Album::where("title", "=","Bat Out of Hell" )->firstOrFail();

        Track::create( [
            'id'=>1,
            'no'=>1,
            'title'=>'Wanna Be Startin\' Somethin\'',
            'length'=>'00:06:02',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>2,
            'no'=>2,
            'title'=>'Baby Be Mine',
            'length'=>'00:04:20',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>3,
            'no'=>3,
            'title'=>'The Girl Is Mine (with Paul McCartney)',
            'length'=>'00:03:41',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>4,
            'no'=>4,
            'title'=>'Thriller',
            'length'=>'00:05:57',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>5,
            'no'=>5,
            'title'=>'Beat It',
            'length'=>'00:04:18',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>6,
            'no'=>6,
            'title'=>'Billie Jean',
            'length'=>'00:04:54',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>7,
            'no'=>7,
            'title'=>'Human Nature',
            'length'=>'00:04:07',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>8,
            'no'=>8,
            'title'=>'P.Y.T. (Pretty Young Thing)',
            'length'=>'00:03:58',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>9,
            'no'=>9,
            'title'=>'The Lady in My Life',
            'length'=>'00:04:59',
            'album_id'=>$thriller->id
        ] );

        Track::create( [
            'id'=>10,
            'no'=>1,
            'title'=>'Hells Bells',
            'length'=>'00:05:10',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>11,
            'no'=>2,
            'title'=>'Shoot to Thrill',
            'length'=>'00:05:17',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>12,
            'no'=>3,
            'title'=>'What Do You Do for Money Honey',
            'length'=>'00:03:33',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>13,
            'no'=>4,
            'title'=>'Given the Dog a Bone',
            'length'=>'00:03:30',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>14,
            'no'=>5,
            'title'=>'Let Me Put My Love into You',
            'length'=>'00:04:16',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>15,
            'no'=>6,
            'title'=>'Back in Black',
            'length'=>'00:04:14',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>16,
            'no'=>7,
            'title'=>'You Shook Me All Night Long',
            'length'=>'00:03:30',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>17,
            'no'=>8,
            'title'=>'Have a Drink on Me',
            'length'=>'00:03:57',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>18,
            'no'=>9,
            'title'=>'Shake a Leg',
            'length'=>'00:04:06',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>19,
            'no'=>10,
            'title'=>'Rock and Roll Ain\'t Noise Pollution',
            'length'=>'00:04:15',
            'album_id'=>$backInBack->id
        ] );

        Track::create( [
            'id'=>20,
            'no'=>1,
            'title'=>'Bat Out of Hell',
            'length'=>'00:09:51',
            'album_id'=>$bat->id,
        ] );

        Track::create( [
            'id'=>21,
            'no'=>2,
            'title'=>'You Took the Words Right Out of My Mouth (Hot Summer Night)',
            'length'=>'00:05:04',
            'album_id'=>$bat->id,
        ] );

        Track::create( [
            'id'=>22,
            'no'=>3,
            'title'=>'Heaven Can Wait',
            'length'=>'00:04:40',
            'album_id'=>$bat->id,
        ] );

        Track::create( [
            'id'=>23,
            'no'=>4,
            'title'=>'All Revved Up with No Place to Go',
            'length'=>'00:04:19',
            'album_id'=>$bat->id,
        ] );

        Track::create( [
            'id'=>24,
            'no'=>5,
            'title'=>'Two Out of Three Ain\'t Bad',
            'length'=>'00:05:26',
            'album_id'=>$bat->id,
        ] );

        Track::create( [
            'id'=>25,
            'no'=>6,
            'title'=>'Paradise by the Dashboard Light (duet with Ellen Foley)',
            'length'=>'00:08:28',
            'album_id'=>$bat->id,
        ] );

        Track::create( [
            'id'=>26,
            'no'=>7,
            'title'=>'For Crying Out Loud',
            'length'=>'00:08:48',
            'album_id'=>$bat->id,
        ] );
    }
}
