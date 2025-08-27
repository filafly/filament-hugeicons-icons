<?php

namespace Filafly\Icons\Hugeicons;

use Filafly\Icons\Hugeicons\Enums\Hugeicons;
use Filafly\Icons\IconSet;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

class HugeiconsIcons extends IconSet
{
    protected string $pluginId = 'filafly-filament-hugeicons-icons';

    protected mixed $iconEnum = Hugeicons::class;

    protected string $iconPrefix = 'hugeicons'; // e.g., 'phosphor', 'carbon'

    protected array $iconMap = [
        // Panels icon aliases
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Hugeicons::Replace,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Hugeicons::Replace,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Hugeicons::Replace,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Hugeicons::Replace,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Hugeicons::Replace,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Hugeicons::Replace,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Hugeicons::Replace,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Hugeicons::Replace,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Hugeicons::Replace,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Hugeicons::Replace,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => Hugeicons::Replace,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Hugeicons::Replace,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => Hugeicons::Replace,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Hugeicons::Replace,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Hugeicons::Replace,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => Hugeicons::Replace,
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => Hugeicons::Replace,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => Hugeicons::Replace,
        TablesIconAlias::ACTIONS_FILTER => Hugeicons::Replace,
        TablesIconAlias::ACTIONS_GROUP => Hugeicons::Replace,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Hugeicons::Replace,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Hugeicons::Replace,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Hugeicons::Replace,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Hugeicons::Replace,
        TablesIconAlias::EMPTY_STATE => Hugeicons::Replace,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Hugeicons::Replace,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Hugeicons::Replace,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Hugeicons::Replace,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Hugeicons::Replace,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Hugeicons::Replace,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Hugeicons::Replace,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Hugeicons::Replace,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Hugeicons::Replace,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Hugeicons::Replace,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => Hugeicons::Replace,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Hugeicons::Replace,
        TablesIconAlias::REORDER_HANDLE => Hugeicons::Replace,
        TablesIconAlias::SEARCH_FIELD => Hugeicons::Replace,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Hugeicons::Replace,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Hugeicons::Replace,
        NotificationsIconAlias::NOTIFICATION_DANGER => Hugeicons::Replace,
        NotificationsIconAlias::NOTIFICATION_INFO => Hugeicons::Replace,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Hugeicons::Replace,
        NotificationsIconAlias::NOTIFICATION_WARNING => Hugeicons::Replace,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => Hugeicons::Replace,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::DELETE_ACTION => Hugeicons::Replace,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::DELETE_ACTION_MODAL => Hugeicons::Replace,
        ActionsIconAlias::DETACH_ACTION => Hugeicons::Replace,
        ActionsIconAlias::DETACH_ACTION_MODAL => Hugeicons::Replace,
        ActionsIconAlias::DISSOCIATE_ACTION => Hugeicons::Replace,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Hugeicons::Replace,
        ActionsIconAlias::EDIT_ACTION => Hugeicons::Replace,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::FORCE_DELETE_ACTION => Hugeicons::Replace,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Hugeicons::Replace,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::MODAL_CONFIRMATION => Hugeicons::Replace,
        ActionsIconAlias::REPLICATE_ACTION => Hugeicons::Replace,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::RESTORE_ACTION => Hugeicons::Replace,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => Hugeicons::Replace,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Hugeicons::Replace,
        ActionsIconAlias::VIEW_ACTION => Hugeicons::Replace,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Hugeicons::Replace,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Hugeicons::Replace,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Hugeicons::Replace,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Hugeicons::Replace,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => Hugeicons::Replace,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Hugeicons::Replace,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Hugeicons::Replace,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Hugeicons::Replace,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Hugeicons::Replace,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Hugeicons::Replace,
    ];
}