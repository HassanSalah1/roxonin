<?php

namespace App\DataTables;

use Spatie\Permission\Models\Role;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RolesDataTable extends DataTable
{
  /**
   * Build DataTable class.
   *
   * @param mixed $query Results from query() method.
   * @return \Yajra\DataTables\DataTableAbstract
   */
  public function dataTable($query)
  {
    return datatables()
      ->eloquent($query)
      ->addColumn('action', 'dashboard.roles.action');
  }

  /**
   * Get query source of dataTable.
   *
   * @param \App\Models\Role $model
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function query(Role $model)
  {
    return $model->newQuery();
  }

  /**
   * Optional method if you want to use html builder.
   *
   * @return \Yajra\DataTables\Html\Builder
   */
  public function html()
  {
    return $this->builder()
      ->setTableId('roles-table')
      ->columns($this->getColumns())
      ->minifiedAjax()
      ->dom('Blfrtip')
      ->orderBy(0)
      ->buttons(
        Button::make('create'),
        Button::make('export'),
        Button::make('print'),
        Button::make('reset'),
        Button::make('reload')
      );
  }

  /**
   * Get columns.
   *
   * @return array
   */
  protected function getColumns()
  {
    return [
      Column::make('id'),
      Column::make('name'),
      Column::make('created_at'),
      Column::computed('action')
        ->exportable(false)
        ->printable(false)
        ->width(60)
        ->addClass('text-center'),
    ];
  }

  /**
   * Get filename for export.
   *
   * @return string
   */
  protected function filename()
  {
    return 'Roles_' . date('YmdHis');
  }
}
