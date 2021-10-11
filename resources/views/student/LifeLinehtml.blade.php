<div class="col-lg-12">
    <ul class="timeline timeline-split" id="life_line_tour">
        @foreach($Lifeline as $event)
            <li class="timeline-item">
                <div class="timeline-info">
                    <span>&nbsp;&nbsp;{{$event['standard']}}th STD</span>
                </div>
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p style="margin-bottom: 0rem;">{{$event['life_event']}}
                        @if($event['school_approved']==1)<i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>@endif
                    </p>
                    @if($event['school_approved']==0)
                        <p style="float: right; margin-bottom: 0;">
                            <a href={{"deletelifeline/".$event['id']}} onclick="return confirm('Are you sure you want to delete the Life Event?\nNote: Once Deleted the Data Cannot Be Retrieved. ')" style="text-decoration: none;color:black;"><span class="lifeline_edit_delete" data-id="6027" style="display: block;"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                        </p>
                        <p style="float: right; margin-bottom: 0;">
                            <span class="lifeline_edit" data-id="{{$event['id']}}" style="display: block;" onclick="lifelineedit({{$event['id']}})"><i class="fa fa-pen" aria-hidden="true"></i></span>
                        </p>
                    @endif
                    <div style="clear: both;"></div>
                </div>
            </li>
        @endforeach
        <li class="timeline-item">
            <div class="timeline-info">
                <span>&nbsp;&nbsp;8th STD</span>
            </div>
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <p style="margin-bottom: 0rem;">It is a long established fact that a reader will be distracted by the readable content of a page when
                    <i class="fa fa-check-circle" style="color: #70ad47;" title="This entry has been verified."></i>
                </p>
                <div style="clear: both;"></div>
            </div>
        </li>
    </ul>
</div>
