<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('pagos_empleados', function (Blueprint $table) {
            $table->id('idPagoEmpleado');
            $table->foreignId('id')->constrained('empleados');
            $table->dateTime('fecha_pago')->default(now());
            $table->decimal('valor_pago', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos_empleados');
    }
}
