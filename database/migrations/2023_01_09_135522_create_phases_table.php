<!-- <?php?>


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        Schema::create('phases', function (Blueprint $table) {

            $table->increments('idPhase');
            $table->string('nomPhase'); 
            $table->integer('duree'); 
            $table->string('priorite'); 
            $table->timestamps();

            // $table->unsignedBigInteger('projet_id');
            // $table->foreign('projet_id')->references('id')->on('projets');
           // $table->foreignId('projet_id')->constrained();

        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {

        Schema::dropIfExists('phases');

    }

}; -->
