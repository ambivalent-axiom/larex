<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TranslateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Job $joblisting
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //AI::translate($this->joblisting);
        logger('Translating ' . $this->joblisting . " to spanish." );
    }
}
