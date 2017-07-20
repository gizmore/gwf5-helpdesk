<?php
final class GWF_HelpTicket extends GDO
{
    use GWF_CommentedObject;
    
    
    public function gdoColumns()
    {
        return array(
            GDO_AutoInc::make('ticket_id'),
            GDO_Int::make('ticket_priority')->min(1)->max(9)->unsigned()->bytes(1)->label('priortiy'),
            GDO_CreatedAt::make('ticket_created'),
            GDO_CreatedBy::make('ticket_creator'),
            
        );
    }
}