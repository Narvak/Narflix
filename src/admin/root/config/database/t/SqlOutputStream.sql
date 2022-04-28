CREATE EXTERNAL STREAM [SqlOutputStream] WITH
(
	DATA_SOURCE = [SqlOutputDataSource],
	LOCATION = N'TSQLStreaming.dbo.DataTable'
)
