#sputnik-job-description
This is the definition of a job to be performed by sputnik.
##Structure
###repository
The git repository where this job is stored.
###runCommand
The command to be run in order to start the execution of this job.
###arguments
A set of oredered arguments that are to be passed to be passed to the run command in the same order they are supplied in this array.
###output
The output that was sent to stdout during the processing of this job. Will only be returned once all the output has been captured.
###errorOutput
The output that was sent to stderr during the processing of this job. Will only be returned once all the output has been captured.
###returnData
A named list of data that is to be returned for use by jigsaw. This data may be used to execute subsequent jobs. As much data as possible should be returned by the job.