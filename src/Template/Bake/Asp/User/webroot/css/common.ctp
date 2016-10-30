.scroll {
    overflow: auto;
    white-space: nowrap;
}
.datepicker {
    min-width: 8em;
}
td > span.currency {
    text-align: right;
    width: 100%;
    display: inline-block;
}
select.readonly {
    background-color: gray;
}
.sidebar-collapse .treeview-menu, .sidebar-collapse .treeview > a > span {
    width: 220px !important;
}

.navbar-nav > li.group-name,
.navbar-nav > li.full-name {
    padding: 15px;
}

.default-table tr th:first-child {
    min-width: 110px;
}

span.group-depth {
    display:inline-block;
    width: 2em;
}

/* .input-smを利用したため */
.select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0;
    padding: 4px 12px;
    height: 30px;
}
input[type=checkbox].input-sm {
    height: 12px;
}
input[type=text].index-text {
    width: 150px;
}
.ui-tooltip-content, .ui-tooltip {
    word-break:break-all !important;
}

/* 請求一覧画面 ステータス変更不可エラー */
p.invoice-status-roll-error {
    color: #a94442;
}

tr.status-cancelled {
    background-color: #b5bbc8;
    opacity: .80;
}

/* 案件詳細 受注No.固定表示 */
.fixed_number {
    position: fixed;
    bottom: -10px;
    left: 10px;
    z-index: 9999;
    background: #fff;
    padding: 20px;
    border: 1px solid #cccccc;
    border-radius: 5px;
}