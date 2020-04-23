<?php

namespace App\DataTables;

use App\Models\Item;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;

class ItemDataTable extends DataTable {
    const EXTRA_COLUMNS = ['crystal_type', 'crystal_count', 'wa_type', 'p_defdam', 'm_defdam'];

    protected function tryGetAttr(Item $item, $attr = '') {
        $result = '';

        switch ($attr) {
            case 'crystal_type':
            case 'crystal_count':
                if (null !== $item->armor) {
                    $result = $item->armor->$attr;
                }elseif (null !== $item->weapon) {
                    $result = $item->weapon->$attr;
                }
            break;
            case 'wa_type':
                if (null !== $item->armor) {
                    $result = $item->armor->armor_type;
                }elseif (null !== $item->weapon) {
                    $result = $item->weapon->weapon_type;
                }
            break;
            case 'p_defdam':
                if (null !== $item->armor) {
                    $result = $item->armor->physical_defense;
                }elseif (null !== $item->weapon) {
                    $result = $item->weapon->physical_damage;
                }
            break;
            case 'm_defdam':
                if (null !== $item->armor) {
                    $result = $item->armor->magical_defense;
                }elseif (null !== $item->weapon) {
                    $result = $item->weapon->magical_damage;
                }
            break;
        }

        return $result;
    }

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $result = datatables()->eloquent($query);

        foreach (self::EXTRA_COLUMNS as $column) {
            $result->addColumn($column, function (Item $item) use ($column) {
                return $this->tryGetAttr($item, $column);
            });
        }

        return $result;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Item $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Item $model)
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
            ->setTableId('items-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
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
        $columns = [
            /*Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),*/
            Column::make('id', 'id')->searchable(false),
            Column::make('itemname.name', 'name')->searchable(true),
            Column::make('type', 'type')->searchable(false),
            Column::make('price', 'price')->searchable(false),
            /*Column::make('crystal_type', 'crystal_type'),
            Column::make('crystal_count', 'crystal_count'),
            Column::make('wa_type', 'wa_type'),
            Column::make('p_defdam', 'p_defdam'),
            Column::make('m_defdam', 'm_defdam'),*/
        ];

        foreach (self::EXTRA_COLUMNS as $column) {
            $columns [] = Column::make($column)->searchable(false);
        }

        /*$columnsArmor = [
            Column::make('armor.crystal_type', 'Cry Type'),
            Column::make('armor.crystal_count', 'Cry Cnt'),
            Column::make('armor.armor_type', 'Type'),
            Column::make('armor.physical_defense', 'PDef'),
            Column::make('armor.magical_defense', 'MDef'),

            Column::make('armor.body_part', 'Place'),
            Column::make('armor.mp_bonus', 'MPBonus'),
        ];

        $columnsWeapon = [
            Column::make('weapon.crystal_type', 'Cry Type'),
            Column::make('weapon.crystal_count', 'Cry Cnt'),
            Column::make('weapon.weapon_type', 'Type'),
            Column::make('weapon.physical_damage', 'PAtk'),
            Column::make('weapon.magical_damage', 'MAtk'),

            Column::make('weapon.hands', 'Part'),
            Column::make('weapon.soulshot_count', 'Part'),
            Column::make('weapon.speed', 'Spd'),
            Column::make('weapon.critical', 'Crit'),
        ];*/

        return $columns;
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return __CLASS__. '_' . date('YmdHis');
    }
}
