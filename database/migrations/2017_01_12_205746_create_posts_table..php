<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable.extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(&#39;posts&#39;, function (Blueprint $table) {

$table-&gt;increments(&#39;id&#39;);

$table-&gt;string(&#39;title&#39;);

$table-&gt;string(&#39;description&#39;);

$table-&gt;timestamps();
});
        //
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
Schema::drop(&#39;posts&#39;);
        //

    }
}
