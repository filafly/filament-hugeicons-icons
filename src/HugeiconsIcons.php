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
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Hugeicons::GlobalSearch,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Hugeicons::Filter,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Hugeicons::DashboardCircle,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Hugeicons::Login01,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Hugeicons::Login01,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Hugeicons::Edit01,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Hugeicons::Settings01,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Hugeicons::Eye,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Hugeicons::ArrowLeft01,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Hugeicons::ArrowLeft01,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Hugeicons::ArrowRight01,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Hugeicons::ArrowRight01,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Hugeicons::ArrowDown01,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Hugeicons::CreditCard,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Hugeicons::User,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Hugeicons::UserAdd01,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Hugeicons::Menu01,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Hugeicons::Sun03,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Hugeicons::Moon02,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Hugeicons::Computer,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Hugeicons::ArrowLeft01,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Hugeicons::ArrowRight01,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Hugeicons::Menu01,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Hugeicons::Notification01,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => Hugeicons::User,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Hugeicons::Logout01,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Hugeicons::Logout01,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Hugeicons::BookOpen01,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => Hugeicons::Github,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Hugeicons::Copy01,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Hugeicons::ArrowDown01,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Hugeicons::Delete01,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Hugeicons::ArrowExpand01,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Hugeicons::ArrowDown01,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Hugeicons::ArrowUp01,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Hugeicons::Drag01,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Hugeicons::Search01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Hugeicons::Crop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Hugeicons::Drag01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Hugeicons::FlipHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Hugeicons::FlipVertical,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Hugeicons::ArrowDown01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Hugeicons::ArrowLeft01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Hugeicons::ArrowRight01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Hugeicons::ArrowUp01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Hugeicons::RotateLeft01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Hugeicons::RotateRight01,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Hugeicons::Zoom,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Hugeicons::ZoomInArea,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Hugeicons::ZoomOutArea,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Hugeicons::Delete01,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Hugeicons::Drag01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Hugeicons::Copy01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Hugeicons::ArrowDown01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Hugeicons::Delete01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Hugeicons::ArrowExpand01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Hugeicons::ArrowDown01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Hugeicons::ArrowUp01,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Hugeicons::Drag01,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Hugeicons::Add01,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Hugeicons::Edit01,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Hugeicons::ViewOff,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Hugeicons::Eye,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Hugeicons::ToggleOff,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Hugeicons::ToggleOn,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => Hugeicons::Layout3Column,
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => Hugeicons::Drag01,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => Hugeicons::Drag01,
        TablesIconAlias::ACTIONS_FILTER => Hugeicons::Filter,
        TablesIconAlias::ACTIONS_GROUP => Hugeicons::Group01,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Hugeicons::Menu01,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Hugeicons::ArrowDown01,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Hugeicons::CheckmarkCircle01,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Hugeicons::CheckmarkCircle01,
        TablesIconAlias::EMPTY_STATE => Hugeicons::Inbox,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Hugeicons::ToggleOn,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Hugeicons::Calendar01,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Hugeicons::FunctionOfX,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Hugeicons::Link01,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Hugeicons::Menu01,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Hugeicons::Text,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Hugeicons::FilterRemove,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Hugeicons::ArrowDown01,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Hugeicons::ArrowUp02,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => Hugeicons::ArrowUpDown,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Hugeicons::ArrowDown02,
        TablesIconAlias::REORDER_HANDLE => Hugeicons::Drag01,
        TablesIconAlias::SEARCH_FIELD => Hugeicons::Search01,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Hugeicons::Inbox,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Hugeicons::Cancel01,
        NotificationsIconAlias::NOTIFICATION_DANGER => Hugeicons::AlertCircle,
        NotificationsIconAlias::NOTIFICATION_INFO => Hugeicons::InformationCircle,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Hugeicons::CheckmarkCircle01,
        NotificationsIconAlias::NOTIFICATION_WARNING => Hugeicons::Alert01,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => Hugeicons::Group01,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Hugeicons::Add01,
        ActionsIconAlias::DELETE_ACTION => Hugeicons::Delete01,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Hugeicons::Delete01,
        ActionsIconAlias::DELETE_ACTION_MODAL => Hugeicons::Delete01,
        ActionsIconAlias::DETACH_ACTION => Hugeicons::Unlink01,
        ActionsIconAlias::DETACH_ACTION_MODAL => Hugeicons::Unlink01,
        ActionsIconAlias::DISSOCIATE_ACTION => Hugeicons::Unlink01,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Hugeicons::Unlink01,
        ActionsIconAlias::EDIT_ACTION => Hugeicons::Edit01,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Hugeicons::Edit01,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Hugeicons::Download01,
        ActionsIconAlias::FORCE_DELETE_ACTION => Hugeicons::Delete01,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Hugeicons::Delete01,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Hugeicons::Delete01,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Hugeicons::Upload01,
        ActionsIconAlias::MODAL_CONFIRMATION => Hugeicons::CheckmarkCircle01,
        ActionsIconAlias::REPLICATE_ACTION => Hugeicons::Copy01,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Hugeicons::Copy01,
        ActionsIconAlias::RESTORE_ACTION => Hugeicons::RestoreBin,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => Hugeicons::RestoreBin,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Hugeicons::RestoreBin,
        ActionsIconAlias::VIEW_ACTION => Hugeicons::Eye,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Hugeicons::Eye,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Hugeicons::CheckmarkCircle01,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Hugeicons::CheckmarkCircle01,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Hugeicons::CheckmarkCircle01,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => Hugeicons::Delete01,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Hugeicons::ArrowRight01,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Hugeicons::ArrowLeft01,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Hugeicons::Cancel01,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Hugeicons::ArrowLeftDouble,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Hugeicons::ArrowRightDouble,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Hugeicons::ArrowRightDouble,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Hugeicons::ArrowLeftDouble,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Hugeicons::ArrowRight01,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Hugeicons::ArrowLeft01,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Hugeicons::ArrowLeft01,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Hugeicons::ArrowRight01,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Hugeicons::ArrowDown01,
    ];
}
