CREATE EXTERNAL FILE FORMAT [StreamFileFormat] WITH
(
	FORMAT_TYPE = JSON,
	DATA_COMPRESSION = 'org.apache.hadoop.io.compress.GzipCodec'
)
