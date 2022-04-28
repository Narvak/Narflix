CREATE EXTERNAL STREAM [EdgeHubInputStream] WITH
(
	DATA_SOURCE = [EdgeHubInputDataSource],
	LOCATION = N'input',
	FILE_FORMAT = StreamFileFormat
)
